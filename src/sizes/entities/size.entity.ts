import { Column, DataType, Model, Table } from 'sequelize-typescript';

@Table({ tableName: 'sizes' })
export class Size extends Model<Size> {
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
  size: string;

  @Column({
    type: DataType.DECIMAL(10, 2),
    allowNull: false,
  })
  price: number;

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
