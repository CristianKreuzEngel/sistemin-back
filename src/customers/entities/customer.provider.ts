import { Customer } from './customer.entity';

export const customerProvider = [
  {
    provide: 'CUSTOMERS_PROVIDER',
    useValue: Customer,
  },
];
