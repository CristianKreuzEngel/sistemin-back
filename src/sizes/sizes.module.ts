import { Module } from '@nestjs/common';
import { SizesService } from './sizes.service';
import { SizesController } from './sizes.controller';
import { SizeProviders } from './entities/size.provider';

@Module({
  controllers: [SizesController],
  providers: [SizesService, ...SizeProviders],
})
export class SizesModule {}
