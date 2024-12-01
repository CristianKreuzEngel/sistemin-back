import { Payment } from './payment.entity';

export const PaymentProvider = [
  {
    provide: 'PAYMENTS_REPOSITORY',
    useValue: Payment,
  },
];
