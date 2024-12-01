import { Module } from '@nestjs/common';
import { PaymentsService } from './payments.service';
import { PaymentsController } from './payments.controller';
import { PaymentProvider } from './entities/payment.provider';

@Module({
  controllers: [PaymentsController],
  providers: [PaymentsService, ...PaymentProvider],
})
export class PaymentsModule {}
