<?php
	namespace IoJaegers\OceanCms;

	use IoJaegers\OceanCms\configuration\Setting;


    /**
     *
     */
    class OceanCMS
	{
        //
        /**
         *
         */
        public function __construct()
        {

        }

        // Variable
        private Setting|null $settings = null;

        // Functions
        /**
         * @return void
         */
        function initialise(): void
        {

        }

        /**
         * @return void
         */
        function execute(): void
        {

        }

        /**
         * @return void
         */
        function clean(): void
        {

        }


        // Accessors
        /**
         * @return Setting|null
         */
        public final function getSettings(): ?Setting
        {
            return $this->settings;
        }

        /**
         * @param Setting|null $settings
         */
        public final function setSettings( ?Setting $settings ): void
        {
            $this->settings = $settings;
        }
	}
?>