import { Module } from '@nestjs/common';
import { CustomersService } from './customers.service';
import { CustomersController } from './customers.controller';
import { CustomerProviders } from './entities/customer.provider';

@Module({
  controllers: [CustomersController],
  providers: [CustomersService, ...CustomerProviders],
  exports: [CustomersService],
})
export class CustomersModule {}
