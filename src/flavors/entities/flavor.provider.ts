import { Flavor } from './flavor.entity';

export const FlavorProvider = [
  {
    provide: 'FLAVORS_REPOSITORY',
    useValue: Flavor,
  },
];
