<?php
namespace Domain\Services;

use Domain\Abstractions\AbstractDomainService;
use Domain\Contracts\Repository\ProductCategoryRepositoryContract;
use Domain\Contracts\Repository\ProductRepositoryContract;
use Domain\Contracts\Service\ProductServiceContract;

class ProductService extends AbstractDomainService implements ProductServiceContract
{
    public $productCategoryRepository;

    public function __construct(ProductRepositoryContract $repositoryContract, ProductCategoryRepositoryContract $productCategoryRepositoryContract)
    {
        parent::__construct($repositoryContract);
        $this->productCategoryRepository = $productCategoryRepositoryContract;
    }

    public function update($entityId, $post)
    {
        $this->productCategoryRepository->deleteCategoriesByProductId($entityId);

        return parent::update($entityId, $post); // TODO: Change the autogenerated stub
    }

    public function getProductsByCompany($companyId,$filter)
    {
        return  $this->repository->getProductsByCompany($companyId,$filter);
    }
}