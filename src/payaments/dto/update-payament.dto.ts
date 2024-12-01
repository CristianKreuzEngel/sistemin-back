import { PartialType } from '@nestjs/mapped-types';
import { CreatePayamentDto } from './create-payament.dto';

export class UpdatePayamentDto extends PartialType(CreatePayamentDto) {}
