<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the base object of media.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/media?view=bingads-12 Media Data Object
     * 
     * @used-by AddMediaRequest
     */
    class Media
    {
        /**
         * The unique Bing Ads identifier of the media.
         * @var integer
         */
        public $Id;

        /**
         * The type of media to add to the media library.
         * @var string
         */
        public $MediaType;

        /**
         * The media type.
         * @var string
         */
        public $Type;
    }

}
