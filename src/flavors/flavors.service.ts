import { Inject, Injectable, NotFoundException } from '@nestjs/common';
import { CreateFlavorDto } from './dto/create-flavor.dto';
import { UpdateFlavorDto } from './dto/update-flavor.dto';
import { Flavor } from './entities/flavor.entity';

@Injectable()
export class FlavorsService {
  constructor(
    @Inject('FLAVORS_REPOSITORY') private flavorsRepository: typeof Flavor,
  ) {}
  async create(createFlavorDto: CreateFlavorDto) {
    return await this.flavorsRepository.create(createFlavorDto);
  }

  async findAll() {
    return await this.flavorsRepository.findAll();
  }

  async findOne(id: number) {
    return await this.flavorsRepository.findByPk(id);
  }

  async update(id: number, updateFlavorDto: UpdateFlavorDto) {
    const flavor: Flavor = await this.flavorsRepository.findByPk(id);
    if (!flavor) {
      throw new NotFoundException(`Nenhum sabor encontrado!`);
    }
    return await this.flavorsRepository.update(updateFlavorDto, {
      where: { id },
    });
  }

  async remove(id: number) {
    const flavor: Flavor = await this.flavorsRepository.findByPk(id);
    if (!flavor) {
      throw new NotFoundException(`Nenhum sabor encontrado!`);
    }
    return await this.flavorsRepository.destroy({ where: { id } });
  }
}
