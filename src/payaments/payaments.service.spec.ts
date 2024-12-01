import { Test, TestingModule } from '@nestjs/testing';
import { PayamentsService } from './payaments.service';

describe('PayamentsService', () => {
  let service: PayamentsService;

  beforeEach(async () => {
    const module: TestingModule = await Test.createTestingModule({
      providers: [PayamentsService],
    }).compile();

    service = module.get<PayamentsService>(PayamentsService);
  });

  it('should be defined', () => {
    expect(service).toBeDefined();
  });
});
