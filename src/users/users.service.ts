import { Inject, Injectable, NotFoundException } from '@nestjs/common';
import { CreateUserDto } from './dto/create-user.dto';
import { UpdateUserDto } from './dto/update-user.dto';
import { User } from './entities/user.entity';
import * as bcrypt from 'bcrypt';

@Injectable()
export class UsersService {
  constructor(
    @Inject('USERS_REPOSITORY') private userRepository: typeof User,
  ) {}

  async validateUser(login: string, pass: string): Promise<any> {
    const user = await this.userRepository.findOne({ where: { login } });
    if (user && (await bcrypt.compare(pass, user.password))) {
      const { password, ...result } = user.get({ plain: true });
      return result;
    }
    return null;
  }
  async create(createUserDto: CreateUserDto) {
    return await this.userRepository.create(createUserDto);
  }

  async findAll() {
    return await this.userRepository.findAll();
  }

  async findOne(id: number) {
    return await this.userRepository.findOne({ where: { id } });
  }

  async update(id: number, updateUserDto: UpdateUserDto) {
    const user: User = await this.userRepository.findByPk(id);
    if (!user) {
      throw new NotFoundException('Usuário não encontrado!');
    }
    return await this.userRepository.update(updateUserDto, { where: { id } });
  }

  async remove(id: number) {
    const user: User = await this.userRepository.findByPk(id);
    if (!user) {
      throw new NotFoundException('Usuário não encontrado!');
    }
    return await this.userRepository.destroy({ where: { id } });
  }
}
