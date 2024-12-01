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
import { SizeProviders } from './sizes/entities/size.provider';
import { FlavorProviders } from './flavors/entities/flavor.provider';
import { CustomerProviders } from './customers/entities/customer.provider';

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
  providers: [
    ...databaseProviders,
    ...UsersProviders,
    ...SizeProviders,
    ...FlavorProviders,
    ...CustomerProviders,
  ],
})
export class AppModule {}
