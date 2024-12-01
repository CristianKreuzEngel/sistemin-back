import { Flavor } from './flavor.entity';

export const FlavorProviders = [
  {
    provide: 'FLAVORS_REPOSITORY',
    useValue: Flavor,
  },
];
