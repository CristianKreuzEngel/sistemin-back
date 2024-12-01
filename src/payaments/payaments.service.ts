import { Injectable } from '@nestjs/common';
import { CreatePayamentDto } from './dto/create-payament.dto';
import { UpdatePayamentDto } from './dto/update-payament.dto';

@Injectable()
export class PayamentsService {
  create(createPayamentDto: CreatePayamentDto) {
    return 'This action adds a new payament';
  }

  findAll() {
    return `This action returns all payaments`;
  }

  findOne(id: number) {
    return `This action returns a #${id} payament`;
  }

  update(id: number, updatePayamentDto: UpdatePayamentDto) {
    return `This action updates a #${id} payament`;
  }

  remove(id: number) {
    return `This action removes a #${id} payament`;
  }
}
