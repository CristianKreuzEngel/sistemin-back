import { Inject, Injectable, NotFoundException } from '@nestjs/common';
import { CreatePaymentDto } from './dto/create-payment.dto';
import { UpdatePaymentDto } from './dto/update-payment.dto';
import { Payment } from './entities/payment.entity';

@Injectable()
export class PaymentsService {
  constructor(
    @Inject('PAYMENTS_REPOSITORY')
    private paymentsRepository: typeof Payment,
  ) {}
  async create(createPaymentDto: CreatePaymentDto) {
    return await this.paymentsRepository.create(createPaymentDto);
  }

  async findAll() {
    return await this.paymentsRepository.findAll();
  }

  async findOne(id: number) {
    return await this.paymentsRepository.findByPk(id);
  }

  async update(id: number, updatePaymentDto: UpdatePaymentDto) {
    const payment = await this.paymentsRepository.findByPk(id);
    if (!payment) {
      throw new NotFoundException('Forma de pagamento não encontrada!');
    }
    return await this.paymentsRepository.update(updatePaymentDto, {
      where: { id },
    });
  }

  async remove(id: number) {
    const payment = await this.paymentsRepository.findByPk(id);
    if (!payment) {
      throw new NotFoundException('Forma de pagamento não encontrada!');
    }
    return await this.paymentsRepository.destroy({ where: { id } });
  }
}
