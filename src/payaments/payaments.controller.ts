import { Controller, Get, Post, Body, Patch, Param, Delete } from '@nestjs/common';
import { PayamentsService } from './payaments.service';
import { CreatePayamentDto } from './dto/create-payament.dto';
import { UpdatePayamentDto } from './dto/update-payament.dto';

@Controller('payaments')
export class PayamentsController {
  constructor(private readonly payamentsService: PayamentsService) {}

  @Post()
  create(@Body() createPayamentDto: CreatePayamentDto) {
    return this.payamentsService.create(createPayamentDto);
  }

  @Get()
  findAll() {
    return this.payamentsService.findAll();
  }

  @Get(':id')
  findOne(@Param('id') id: string) {
    return this.payamentsService.findOne(+id);
  }

  @Patch(':id')
  update(@Param('id') id: string, @Body() updatePayamentDto: UpdatePayamentDto) {
    return this.payamentsService.update(+id, updatePayamentDto);
  }

  @Delete(':id')
  remove(@Param('id') id: string) {
    return this.payamentsService.remove(+id);
  }
}
