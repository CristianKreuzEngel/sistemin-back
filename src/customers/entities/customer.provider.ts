import { Customer } from './customer.entity';

export const CustomerProviders = [
  {
    provide: 'CUSTOMERS_PROVIDER',
    useValue: Customer,
  },
];
