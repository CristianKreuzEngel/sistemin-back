import { Inject, Injectable, NotFoundException } from '@nestjs/common';
import { CreateSizeDto } from './dto/create-size.dto';
import { UpdateSizeDto } from './dto/update-size.dto';
import { Size } from './entities/size.entity';

@Injectable()
export class SizesService {
  constructor(
    @Inject('SIZES_REPOSITORY') private sizesRepository: typeof Size,
  ) {}
  async create(createSizeDto: CreateSizeDto) {
    return await this.sizesRepository.create(createSizeDto);
  }

  async findAll() {
    return await this.sizesRepository.findAll();
  }

  async findOne(id: number) {
    return await this.sizesRepository.findByPk(id);
  }

  async update(id: number, updateSizeDto: UpdateSizeDto) {
    const size = await this.sizesRepository.findByPk(id);
    if (!size) {
      throw new NotFoundException('Tamanho não encontrado!');
    }
    return await this.sizesRepository.update(updateSizeDto, { where: { id } });
  }

  async remove(id: number) {
    const size = await this.sizesRepository.findByPk(id);
    if (!size) {
      throw new NotFoundException('Tamanho não encontrado!');
    }
    return await this.sizesRepository.destroy({ where: { id } });
  }
}
