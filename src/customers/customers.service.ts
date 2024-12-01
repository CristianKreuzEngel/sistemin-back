import { Inject, Injectable, NotFoundException } from '@nestjs/common';
import { CreateCustomerDto } from './dto/create-customer.dto';
import { UpdateCustomerDto } from './dto/update-customer.dto';
import { Customer } from './entities/customer.entity';
import * as bcrypt from 'bcrypt';

@Injectable()
export class CustomersService {
  constructor(
    @Inject('CUSTOMERS_PROVIDER') private customerRepository: typeof Customer,
  ) {}

  async validateCustomer(login: string, pass: string) {
    const user = await this.customerRepository.findOne({
      where: { phone: login },
    });
    if (user && (await bcrypt.compare(pass, user.password))) {
      const { password, ...result } = user.get({ plain: true });
      return result;
    }
    return null;
  }

  async create(createCustomerDto: CreateCustomerDto) {
    return await this.customerRepository.create(createCustomerDto);
  }

  async findAll() {
    return await this.customerRepository.findAll();
  }

  async findOne(id: number) {
    return await this.customerRepository.findOne({
      where: {
        id,
      },
    });
  }

  async update(id: number, updateCustomerDto: UpdateCustomerDto) {
    const customer = await this.customerRepository.findByPk(id);
    if (!customer) {
      throw new NotFoundException('Cliente não encontrado');
    }
    return await this.customerRepository.update(updateCustomerDto, {
      where: { id },
    });
  }

  async remove(id: number) {
    const customer = await this.customerRepository.findByPk(id);
    if (!customer) {
      throw new NotFoundException('Cliente não encontrado');
    }
    return await this.customerRepository.destroy({ where: { id: id } });
  }
}
