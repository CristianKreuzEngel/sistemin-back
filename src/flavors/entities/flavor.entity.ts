import { Column, DataType, Model, Table } from 'sequelize-typescript';
@Table({ tableName: 'flavors' })
export class Flavor extends Model<Flavor> {
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
  name: string;

  @Column({
    type: DataType.TEXT,
    allowNull: false,
  })
  description: string;

  @Column({
    type: DataType.BOOLEAN,
    allowNull: false,
    defaultValue: true,
  })
  isActive: boolean;

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
