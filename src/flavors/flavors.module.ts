import { Module } from '@nestjs/common';
import { FlavorsService } from './flavors.service';
import { FlavorsController } from './flavors.controller';
import { FlavorProviders } from './entities/flavor.provider';

@Module({
  controllers: [FlavorsController],
  providers: [FlavorsService, ...FlavorProviders],
})
export class FlavorsModule {}
