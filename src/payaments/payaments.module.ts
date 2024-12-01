import { Module } from '@nestjs/common';
import { PayamentsService } from './payaments.service';
import { PayamentsController } from './payaments.controller';

@Module({
  controllers: [PayamentsController],
  providers: [PayamentsService],
})
export class PayamentsModule {}
