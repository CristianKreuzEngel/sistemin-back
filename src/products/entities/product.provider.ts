import { Product } from './product.entity';

export const ProductProvider = [
  {
    provide: 'PRODUCTS_PROVIDER',
    useValue: Product,
  },
];
