import * as dotenv from 'dotenv';
import { Sequelize } from 'sequelize-typescript';
import { User } from './users/entities/user.entity';
import { Product } from './products/entities/product.entity';
import { Customer } from './customers/entities/customer.entity';
import { Flavor } from './flavors/entities/flavor.entity';
import { Payament } from './payaments/entities/payament.entity';
import { Purchase } from './purchases/entities/purchase.entity';
import { Size } from './sizes/entities/size.entity';

dotenv.config();

export const databaseProviders = [
  {
    provide: 'SEQUELIZE',
    useFactory: async () => {
      const sequelize = new Sequelize({
        dialect: 'postgres',
        host: process.env.DB_HOST,
        port: +process.env.DB_PORT,
        username: process.env.DB_USERNAME,
        password: process.env.DB_PASSWORD,
        database: process.env.DB_NAME,
      });
      sequelize.addModels([
        User,
        Product,
        Customer,
        Flavor,
        Payament,
        Purchase,
        Size,
      ]);
      await sequelize.sync();
      return sequelize;
    },
  },
];
