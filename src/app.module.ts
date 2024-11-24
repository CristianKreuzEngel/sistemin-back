import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { UsersModule } from './users/users.module';
import { SizesModule } from './sizes/sizes.module';
import { FlavorsModule } from './flavors/flavors.module';
import { databaseProviders } from './database.providers';
import { CustomersModule } from './customers/customers.module';
import { PurchasesModule } from './purchases/purchases.module';
import { AuthModule } from './auth/auth.module';

@Module({
  imports: [UsersModule, SizesModule, FlavorsModule, CustomersModule, PurchasesModule, AuthModule],
  controllers: [AppController],
  providers: [...databaseProviders],
})
export class AppModule {}
