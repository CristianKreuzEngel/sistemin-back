import {
  Controller,
  Get,
  Post,
  Body,
  Patch,
  Param,
  Delete,
} from '@nestjs/common';
import { FlavorsService } from './flavors.service';
import { CreateFlavorDto } from './dto/create-flavor.dto';
import { UpdateFlavorDto } from './dto/update-flavor.dto';

@Controller('flavors')
export class FlavorsController {
  constructor(private readonly flavorsService: FlavorsService) {}

  @Post('create-flavor')
  create(@Body() createFlavorDto: CreateFlavorDto) {
    return this.flavorsService.create(createFlavorDto);
  }

  @Get('get-all')
  findAll() {
    return this.flavorsService.findAll();
  }

  @Get('get-flavor/:id')
  findOne(@Param('id') id: string) {
    return this.flavorsService.findOne(+id);
  }

  @Patch('update-flavor/:id')
  update(@Param('id') id: string, @Body() updateFlavorDto: UpdateFlavorDto) {
    return this.flavorsService.update(+id, updateFlavorDto);
  }

  @Delete('delete-flavor/:id')
  remove(@Param('id') id: string) {
    return this.flavorsService.remove(+id);
  }
}
