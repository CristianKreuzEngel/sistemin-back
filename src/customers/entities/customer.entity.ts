import { Column, DataType, Model, Table } from 'sequelize-typescript';

@Table({ tableName: 'customers' })
export class Customer extends Model<Customer> {
  @Column({
    type: DataType.INTEGER,

    autoIncrement: true,

    primaryKey: true,
  })
  id: number;

  @Column({
    type: DataType.STRING(255),

    allowNull: false,
  })
  fullname: string;

  @Column({
    type: DataType.STRING(255),
    unique: true,
    allowNull: false,
  })
  address: string;

  @Column({
    type: DataType.STRING(14),
    unique: true,
    allowNull: false,
  })
  phone: string;

  @Column({
    type: DataType.STRING(255),
    allowNull: false,
  })
  password: string;

  @Column({
    type: DataType.DATE,

    allowNull: false,
  })
  createdAt: string;

  @Column({
    type: DataType.DATE,

    allowNull: false,
  })
  updatedAt: string;
}
