import { Module } from '@nestjs/common';
import { ProductsService } from './products.service';
import { ProductsController } from './products.controller';
import { ProductProvider } from './entities/product.provider';

@Module({
  controllers: [ProductsController],
  providers: [ProductsService, ...ProductProvider],
})
export class ProductsModule {}
