import { Test, TestingModule } from '@nestjs/testing';
import { PayamentsController } from './payaments.controller';
import { PayamentsService } from './payaments.service';

describe('PayamentsController', () => {
  let controller: PayamentsController;

  beforeEach(async () => {
    const module: TestingModule = await Test.createTestingModule({
      controllers: [PayamentsController],
      providers: [PayamentsService],
    }).compile();

    controller = module.get<PayamentsController>(PayamentsController);
  });

  it('should be defined', () => {
    expect(controller).toBeDefined();
  });
});
