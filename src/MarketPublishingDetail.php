<?php
namespace OnixComponents;

use SimpleXMLElement;

class MarketPublishingDetail
{
    
    public ?MarketDateList $marketDateList; //(0,n)
    
    public MarketPublishingStatus $marketPublishingStatus; //(1)

    public ?PromotionCampaignList $promotionCampaignList; //(0,n)

    public ?PublisherRepresentativeList $publisherRepresentativeList; //(0,n)
    
    public function __construct(SimpleXMLElement $nodeMarketPublishingDetail)
    {
        if (isset($nodeMarketPublishingDetail->MarketDate) == true) {
            $this->marketDateList = new MarketDateList($nodeMarketPublishingDetail);
        } else {
            $this->marketDateList = null;
        }

        if (isset($nodeMarketPublishingDetail->PromotionCampaign) == true) {
            $this->promotionCampaignList = new PromotionCampaignList($nodeMarketPublishingDetail);
        } else {
            $this->promotionCampaignList = null;
        }

        if (isset($nodeMarketPublishingDetail->PublisherRepresentative) == true) {
            $this->publisherRepresentativeList = new PublisherRepresentativeList($nodeMarketPublishingDetail);
        } else {
            $this->publisherRepresentativeList = null;
        }

        $this->marketPublishingStatus = new MarketPublishingStatus($nodeMarketPublishingDetail->MarketPublishingStatus);
    }
}

