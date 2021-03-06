<?php
namespace OnixComponents;

use SimpleXMLElement;

class DescriptiveDetail
{

    public ?AncillaryContentList $ancillaryContentList; // (0,n) -

    public ?ContributorList $contributorList; // (0,n) - 

    public TitleDetailList $titleDetailList; // (1,n) -

    public ?CollectionList $collectionList; // (0,n) -
    
    public ProductComposition $productComposition; // (1) -
    
    public ProductForm $productForm; // (1) -

    public ?ProductFormDetailList $productFormDetailList; // (0,n)

    public ?ContributorStatementList $contributorStatementList; // (0,n)

    public ?NoEdition $noEdition; // (0,1) Bandera -

    public ?CountryOfManufacture $countryOfManufacture; // (0,1) -

    public ?EditionNumber $editionNumber; // (0,1) 

    public ?ProductPackaging $productPackaging; // (0,1)

    public ?PrimaryContentType $primaryContentType; // (0,1)

    public ?MeasureList $measureList; // (0,n)

    public ?ProductClassificationList $productClassificationList; // (0,n)

    public ?LanguageList $languageList; // (0,n)

    public ?ExtentList $extentList; // (0,n)

    public ?SubjectList $subjectList; // (0,n)

    public ?AudienceList $audienceList; // (0,n)

    public ?AudienceCodeList $audienceCodeList; // (0,n)

    public ?AudienceRangeList $audienceRangeList; // (0,n)

    public ?EpubTechnicalProtectionList $epubTechnicalProtectionList; // (0,n)

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        $this->titleDetailList = new TitleDetailList($nodeDescriptiveDetail);
        $this->productComposition = new ProductComposition($nodeDescriptiveDetail->ProductComposition);
        $this->productForm = new ProductForm($nodeDescriptiveDetail->ProductForm);

        if (isset($nodeDescriptiveDetail->AncillaryContent) == true) {
            $this->ancillaryContentList = new AncillaryContentList($nodeDescriptiveDetail);
        } else {
            $this->ancillaryContentList = null;
        }

        if (isset($nodeDescriptiveDetail->AudienceCode) == true) {
            $this->audienceCodeList = new AudienceCodeList($nodeDescriptiveDetail);
        } else {
            $this->audienceCodeList = null;
        }

        if (isset($nodeDescriptiveDetail->AudienceRange) == true) {
            $this->audienceRangeList = new AudienceRangeList($nodeDescriptiveDetail);
        } else {
            $this->audienceRangeList = null;
        }

        if (isset($nodeDescriptiveDetail->NoEdition) == true) {
            $this->noEdition = new NoEdition($nodeDescriptiveDetail->NoEdition);
        } else {
            $this->noEdition = null;
        }

        if (isset($nodeDescriptiveDetail->CountryOfManufacture) == true) {
            $this->countryOfManufacture = new CountryOfManufacture($nodeDescriptiveDetail->CountryOfManufacture);
        } else {
            $this->countryOfManufacture = null;
        }

        if (isset($nodeDescriptiveDetail->EditionNumber) == true) {
            $this->editionNumber = new EditionNumber($nodeDescriptiveDetail->EditionNumber);
        } else {
            $this->editionNumber = null;
        }
        
        if (isset($nodeDescriptiveDetail->PrimaryContentType) == true) {
            $this->primaryContentType = new PrimaryContentType($nodeDescriptiveDetail->PrimaryContentType);
        } else {
            $this->primaryContentType = null;
        }

        if (isset($nodeDescriptiveDetail->ProductPackaging) == true) {
            $this->productPackaging = new ProductPackaging($nodeDescriptiveDetail->ProductPackaging);
        } else {
            $this->productPackaging = null;
        }

        if (isset($nodeDescriptiveDetail->EpubTechnicalProtection) == true) {
            $this->epubTechnicalProtectionList = new EpubTechnicalProtectionList($nodeDescriptiveDetail);
        } else {
            $this->epubTechnicalProtectionList = null;
        }

        if (isset($nodeDescriptiveDetail->Collection) == true) {
            $this->collectionList = new CollectionList($nodeDescriptiveDetail);
        } else {
            $this->collectionList = null;
        }

        if (isset($nodeDescriptiveDetail->Contributor) == true) {
            $this->contributorList = new ContributorList($nodeDescriptiveDetail);
        } else {
            $this->contributorList = null;
        }

        if (isset($nodeDescriptiveDetail->ContributorStatement) == true) {
            $this->contributorStatementList = new ContributorStatementList($nodeDescriptiveDetail);
        } else {
            $this->contributorStatementList = null;
        }

        if (isset($nodeDescriptiveDetail->ProductFormDetail) == true) {
            $this->productFormDetailList = new ProductFormDetailList($nodeDescriptiveDetail);
        } else {
            $this->productFormDetailList = null;
        }

        if (isset($nodeDescriptiveDetail->Measure) == true) {
            $this->measureList = new MeasureList($nodeDescriptiveDetail);
        } else {
            $this->measureList = null;
        }

        if (isset($nodeDescriptiveDetail->ProductClassification) == true) {
            $this->productClassificationList = new ProductClassificationList($nodeDescriptiveDetail);
        } else {
            $this->productClassificationList = null;
        }

        if (isset($nodeDescriptiveDetail->Language) == true) {
            $this->languageList = new LanguageList($nodeDescriptiveDetail);
        } else {
            $this->languageList = null;
        }

        if (isset($nodeDescriptiveDetail->Extent) == true) {
            $this->extentList = new ExtentList($nodeDescriptiveDetail);
        } else {
            $this->extentList = null;
        }

        if (isset($nodeDescriptiveDetail->Subject) == true) {
            $this->subjectList = new SubjectList($nodeDescriptiveDetail);
        } else {
            $this->subjectList = null;
        }

        if (isset($nodeDescriptiveDetail->Audience) == true) {
            $this->audienceList = new AudienceList($nodeDescriptiveDetail);
        } else {
            $this->audienceList = null;
        }
    }
}

