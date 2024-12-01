import {
  Controller,
  Get,
  Post,
  Body,
  Patch,
  Param,
  Delete,
} from '@nestjs/common';
import { SizesService } from './sizes.service';
import { CreateSizeDto } from './dto/create-size.dto';
import { UpdateSizeDto } from './dto/update-size.dto';

@Controller('sizes')
export class SizesController {
  constructor(private readonly sizesService: SizesService) {}

  @Post('create-size')
  create(@Body() createSizeDto: CreateSizeDto) {
    return this.sizesService.create(createSizeDto);
  }

  @Get('get-all')
  findAll() {
    return this.sizesService.findAll();
  }

  @Get('get-size/:id')
  findOne(@Param('id') id: string) {
    return this.sizesService.findOne(+id);
  }

  @Patch('update-size/:id')
  update(@Param('id') id: string, @Body() updateSizeDto: UpdateSizeDto) {
    return this.sizesService.update(+id, updateSizeDto);
  }

  @Delete('delete-size/:id')
  remove(@Param('id') id: string) {
    return this.sizesService.remove(+id);
  }
}
