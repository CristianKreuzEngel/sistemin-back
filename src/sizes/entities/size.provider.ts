import { Size } from './size.entity';

export const SizeProviders = [
  {
    provide: 'SIZES_REPOSITORY',
    useValue: Size,
  },
];
