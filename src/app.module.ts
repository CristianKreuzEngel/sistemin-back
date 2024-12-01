import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { UsersModule } from './users/users.module';
import { SizesModule } from './sizes/sizes.module';
import { FlavorsModule } from './flavors/flavors.module';
import { databaseProviders } from './database.providers';
import { CustomersModule } from './customers/customers.module';
import { PurchasesModule } from './purchases/purchases.module';
import { AuthModule } from './auth/auth.module';
import { ProductsModule } from './products/products.module';
import { PayamentsModule } from './payaments/payaments.module';
import { UsersProviders } from './users/entities/user.provider';

@Module({
  imports: [
    UsersModule,
    SizesModule,
    FlavorsModule,
    CustomersModule,
    PurchasesModule,
    AuthModule,
    ProductsModule,
    PayamentsModule,
  ],
  controllers: [AppController],
  providers: [...databaseProviders, ...UsersProviders],
})
export class AppModule {}
