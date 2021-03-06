<?php
/**
 * AgeRatingDeclarationAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * App Store Connect API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * AgeRatingDeclarationAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AgeRatingDeclarationAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AgeRatingDeclaration_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alcohol_tobacco_or_drug_use_or_references' => 'string',
        'gambling_and_contests' => 'bool',
        'gambling_simulated' => 'string',
        'kids_age_band' => '\OpenAPI\Client\Model\KidsAgeBand',
        'medical_or_treatment_information' => 'string',
        'profanity_or_crude_humor' => 'string',
        'sexual_content_graphic_and_nudity' => 'string',
        'sexual_content_or_nudity' => 'string',
        'horror_or_fear_themes' => 'string',
        'mature_or_suggestive_themes' => 'string',
        'unrestricted_web_access' => 'bool',
        'violence_cartoon_or_fantasy' => 'string',
        'violence_realistic_prolonged_graphic_or_sadistic' => 'string',
        'violence_realistic' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'alcohol_tobacco_or_drug_use_or_references' => null,
        'gambling_and_contests' => null,
        'gambling_simulated' => null,
        'kids_age_band' => null,
        'medical_or_treatment_information' => null,
        'profanity_or_crude_humor' => null,
        'sexual_content_graphic_and_nudity' => null,
        'sexual_content_or_nudity' => null,
        'horror_or_fear_themes' => null,
        'mature_or_suggestive_themes' => null,
        'unrestricted_web_access' => null,
        'violence_cartoon_or_fantasy' => null,
        'violence_realistic_prolonged_graphic_or_sadistic' => null,
        'violence_realistic' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'alcohol_tobacco_or_drug_use_or_references' => 'alcoholTobaccoOrDrugUseOrReferences',
        'gambling_and_contests' => 'gamblingAndContests',
        'gambling_simulated' => 'gamblingSimulated',
        'kids_age_band' => 'kidsAgeBand',
        'medical_or_treatment_information' => 'medicalOrTreatmentInformation',
        'profanity_or_crude_humor' => 'profanityOrCrudeHumor',
        'sexual_content_graphic_and_nudity' => 'sexualContentGraphicAndNudity',
        'sexual_content_or_nudity' => 'sexualContentOrNudity',
        'horror_or_fear_themes' => 'horrorOrFearThemes',
        'mature_or_suggestive_themes' => 'matureOrSuggestiveThemes',
        'unrestricted_web_access' => 'unrestrictedWebAccess',
        'violence_cartoon_or_fantasy' => 'violenceCartoonOrFantasy',
        'violence_realistic_prolonged_graphic_or_sadistic' => 'violenceRealisticProlongedGraphicOrSadistic',
        'violence_realistic' => 'violenceRealistic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alcohol_tobacco_or_drug_use_or_references' => 'setAlcoholTobaccoOrDrugUseOrReferences',
        'gambling_and_contests' => 'setGamblingAndContests',
        'gambling_simulated' => 'setGamblingSimulated',
        'kids_age_band' => 'setKidsAgeBand',
        'medical_or_treatment_information' => 'setMedicalOrTreatmentInformation',
        'profanity_or_crude_humor' => 'setProfanityOrCrudeHumor',
        'sexual_content_graphic_and_nudity' => 'setSexualContentGraphicAndNudity',
        'sexual_content_or_nudity' => 'setSexualContentOrNudity',
        'horror_or_fear_themes' => 'setHorrorOrFearThemes',
        'mature_or_suggestive_themes' => 'setMatureOrSuggestiveThemes',
        'unrestricted_web_access' => 'setUnrestrictedWebAccess',
        'violence_cartoon_or_fantasy' => 'setViolenceCartoonOrFantasy',
        'violence_realistic_prolonged_graphic_or_sadistic' => 'setViolenceRealisticProlongedGraphicOrSadistic',
        'violence_realistic' => 'setViolenceRealistic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alcohol_tobacco_or_drug_use_or_references' => 'getAlcoholTobaccoOrDrugUseOrReferences',
        'gambling_and_contests' => 'getGamblingAndContests',
        'gambling_simulated' => 'getGamblingSimulated',
        'kids_age_band' => 'getKidsAgeBand',
        'medical_or_treatment_information' => 'getMedicalOrTreatmentInformation',
        'profanity_or_crude_humor' => 'getProfanityOrCrudeHumor',
        'sexual_content_graphic_and_nudity' => 'getSexualContentGraphicAndNudity',
        'sexual_content_or_nudity' => 'getSexualContentOrNudity',
        'horror_or_fear_themes' => 'getHorrorOrFearThemes',
        'mature_or_suggestive_themes' => 'getMatureOrSuggestiveThemes',
        'unrestricted_web_access' => 'getUnrestrictedWebAccess',
        'violence_cartoon_or_fantasy' => 'getViolenceCartoonOrFantasy',
        'violence_realistic_prolonged_graphic_or_sadistic' => 'getViolenceRealisticProlongedGraphicOrSadistic',
        'violence_realistic' => 'getViolenceRealistic'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const ALCOHOL_TOBACCO_OR_DRUG_USE_OR_REFERENCES_NONE = 'NONE';
    const ALCOHOL_TOBACCO_OR_DRUG_USE_OR_REFERENCES_INFREQUENT_OR_MILD = 'INFREQUENT_OR_MILD';
    const ALCOHOL_TOBACCO_OR_DRUG_USE_OR_REFERENCES_FREQUENT_OR_INTENSE = 'FREQUENT_OR_INTENSE';
    const GAMBLING_SIMULATED_NONE = 'NONE';
    const GAMBLING_SIMULATED_INFREQUENT_OR_MILD = 'INFREQUENT_OR_MILD';
    const GAMBLING_SIMULATED_FREQUENT_OR_INTENSE = 'FREQUENT_OR_INTENSE';
    const MEDICAL_OR_TREATMENT_INFORMATION_NONE = 'NONE';
    const MEDICAL_OR_TREATMENT_INFORMATION_INFREQUENT_OR_MILD = 'INFREQUENT_OR_MILD';
    const MEDICAL_OR_TREATMENT_INFORMATION_FREQUENT_OR_INTENSE = 'FREQUENT_OR_INTENSE';
    const PROFANITY_OR_CRUDE_HUMOR_NONE = 'NONE';
    const PROFANITY_OR_CRUDE_HUMOR_INFREQUENT_OR_MILD = 'INFREQUENT_OR_MILD';
    const PROFANITY_OR_CRUDE_HUMOR_FREQUENT_OR_INTENSE = 'FREQUENT_OR_INTENSE';
    const SEXUAL_CONTENT_GRAPHIC_AND_NUDITY_NONE = 'NONE';
    const SEXUAL_CONTENT_GRAPHIC_AND_NUDITY_INFREQUENT_OR_MILD = 'INFREQUENT_OR_MILD';
    const SEXUAL_CONTENT_GRAPHIC_AND_NUDITY_FREQUENT_OR_INTENSE = 'FREQUENT_OR_INTENSE';
    const SEXUAL_CONTENT_OR_NUDITY_NONE = 'NONE';
    const SEXUAL_CONTENT_OR_NUDITY_INFREQUENT_OR_MILD = 'INFREQUENT_OR_MILD';
    const SEXUAL_CONTENT_OR_NUDITY_FREQUENT_OR_INTENSE = 'FREQUENT_OR_INTENSE';
    const HORROR_OR_FEAR_THEMES_NONE = 'NONE';
    const HORROR_OR_FEAR_THEMES_INFREQUENT_OR_MILD = 'INFREQUENT_OR_MILD';
    const HORROR_OR_FEAR_THEMES_FREQUENT_OR_INTENSE = 'FREQUENT_OR_INTENSE';
    const MATURE_OR_SUGGESTIVE_THEMES_NONE = 'NONE';
    const MATURE_OR_SUGGESTIVE_THEMES_INFREQUENT_OR_MILD = 'INFREQUENT_OR_MILD';
    const MATURE_OR_SUGGESTIVE_THEMES_FREQUENT_OR_INTENSE = 'FREQUENT_OR_INTENSE';
    const VIOLENCE_CARTOON_OR_FANTASY_NONE = 'NONE';
    const VIOLENCE_CARTOON_OR_FANTASY_INFREQUENT_OR_MILD = 'INFREQUENT_OR_MILD';
    const VIOLENCE_CARTOON_OR_FANTASY_FREQUENT_OR_INTENSE = 'FREQUENT_OR_INTENSE';
    const VIOLENCE_REALISTIC_PROLONGED_GRAPHIC_OR_SADISTIC_NONE = 'NONE';
    const VIOLENCE_REALISTIC_PROLONGED_GRAPHIC_OR_SADISTIC_INFREQUENT_OR_MILD = 'INFREQUENT_OR_MILD';
    const VIOLENCE_REALISTIC_PROLONGED_GRAPHIC_OR_SADISTIC_FREQUENT_OR_INTENSE = 'FREQUENT_OR_INTENSE';
    const VIOLENCE_REALISTIC_NONE = 'NONE';
    const VIOLENCE_REALISTIC_INFREQUENT_OR_MILD = 'INFREQUENT_OR_MILD';
    const VIOLENCE_REALISTIC_FREQUENT_OR_INTENSE = 'FREQUENT_OR_INTENSE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlcoholTobaccoOrDrugUseOrReferencesAllowableValues()
    {
        return [
            self::ALCOHOL_TOBACCO_OR_DRUG_USE_OR_REFERENCES_NONE,
            self::ALCOHOL_TOBACCO_OR_DRUG_USE_OR_REFERENCES_INFREQUENT_OR_MILD,
            self::ALCOHOL_TOBACCO_OR_DRUG_USE_OR_REFERENCES_FREQUENT_OR_INTENSE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGamblingSimulatedAllowableValues()
    {
        return [
            self::GAMBLING_SIMULATED_NONE,
            self::GAMBLING_SIMULATED_INFREQUENT_OR_MILD,
            self::GAMBLING_SIMULATED_FREQUENT_OR_INTENSE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMedicalOrTreatmentInformationAllowableValues()
    {
        return [
            self::MEDICAL_OR_TREATMENT_INFORMATION_NONE,
            self::MEDICAL_OR_TREATMENT_INFORMATION_INFREQUENT_OR_MILD,
            self::MEDICAL_OR_TREATMENT_INFORMATION_FREQUENT_OR_INTENSE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProfanityOrCrudeHumorAllowableValues()
    {
        return [
            self::PROFANITY_OR_CRUDE_HUMOR_NONE,
            self::PROFANITY_OR_CRUDE_HUMOR_INFREQUENT_OR_MILD,
            self::PROFANITY_OR_CRUDE_HUMOR_FREQUENT_OR_INTENSE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSexualContentGraphicAndNudityAllowableValues()
    {
        return [
            self::SEXUAL_CONTENT_GRAPHIC_AND_NUDITY_NONE,
            self::SEXUAL_CONTENT_GRAPHIC_AND_NUDITY_INFREQUENT_OR_MILD,
            self::SEXUAL_CONTENT_GRAPHIC_AND_NUDITY_FREQUENT_OR_INTENSE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSexualContentOrNudityAllowableValues()
    {
        return [
            self::SEXUAL_CONTENT_OR_NUDITY_NONE,
            self::SEXUAL_CONTENT_OR_NUDITY_INFREQUENT_OR_MILD,
            self::SEXUAL_CONTENT_OR_NUDITY_FREQUENT_OR_INTENSE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHorrorOrFearThemesAllowableValues()
    {
        return [
            self::HORROR_OR_FEAR_THEMES_NONE,
            self::HORROR_OR_FEAR_THEMES_INFREQUENT_OR_MILD,
            self::HORROR_OR_FEAR_THEMES_FREQUENT_OR_INTENSE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMatureOrSuggestiveThemesAllowableValues()
    {
        return [
            self::MATURE_OR_SUGGESTIVE_THEMES_NONE,
            self::MATURE_OR_SUGGESTIVE_THEMES_INFREQUENT_OR_MILD,
            self::MATURE_OR_SUGGESTIVE_THEMES_FREQUENT_OR_INTENSE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getViolenceCartoonOrFantasyAllowableValues()
    {
        return [
            self::VIOLENCE_CARTOON_OR_FANTASY_NONE,
            self::VIOLENCE_CARTOON_OR_FANTASY_INFREQUENT_OR_MILD,
            self::VIOLENCE_CARTOON_OR_FANTASY_FREQUENT_OR_INTENSE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getViolenceRealisticProlongedGraphicOrSadisticAllowableValues()
    {
        return [
            self::VIOLENCE_REALISTIC_PROLONGED_GRAPHIC_OR_SADISTIC_NONE,
            self::VIOLENCE_REALISTIC_PROLONGED_GRAPHIC_OR_SADISTIC_INFREQUENT_OR_MILD,
            self::VIOLENCE_REALISTIC_PROLONGED_GRAPHIC_OR_SADISTIC_FREQUENT_OR_INTENSE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getViolenceRealisticAllowableValues()
    {
        return [
            self::VIOLENCE_REALISTIC_NONE,
            self::VIOLENCE_REALISTIC_INFREQUENT_OR_MILD,
            self::VIOLENCE_REALISTIC_FREQUENT_OR_INTENSE,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['alcohol_tobacco_or_drug_use_or_references'] = isset($data['alcohol_tobacco_or_drug_use_or_references']) ? $data['alcohol_tobacco_or_drug_use_or_references'] : null;
        $this->container['gambling_and_contests'] = isset($data['gambling_and_contests']) ? $data['gambling_and_contests'] : null;
        $this->container['gambling_simulated'] = isset($data['gambling_simulated']) ? $data['gambling_simulated'] : null;
        $this->container['kids_age_band'] = isset($data['kids_age_band']) ? $data['kids_age_band'] : null;
        $this->container['medical_or_treatment_information'] = isset($data['medical_or_treatment_information']) ? $data['medical_or_treatment_information'] : null;
        $this->container['profanity_or_crude_humor'] = isset($data['profanity_or_crude_humor']) ? $data['profanity_or_crude_humor'] : null;
        $this->container['sexual_content_graphic_and_nudity'] = isset($data['sexual_content_graphic_and_nudity']) ? $data['sexual_content_graphic_and_nudity'] : null;
        $this->container['sexual_content_or_nudity'] = isset($data['sexual_content_or_nudity']) ? $data['sexual_content_or_nudity'] : null;
        $this->container['horror_or_fear_themes'] = isset($data['horror_or_fear_themes']) ? $data['horror_or_fear_themes'] : null;
        $this->container['mature_or_suggestive_themes'] = isset($data['mature_or_suggestive_themes']) ? $data['mature_or_suggestive_themes'] : null;
        $this->container['unrestricted_web_access'] = isset($data['unrestricted_web_access']) ? $data['unrestricted_web_access'] : null;
        $this->container['violence_cartoon_or_fantasy'] = isset($data['violence_cartoon_or_fantasy']) ? $data['violence_cartoon_or_fantasy'] : null;
        $this->container['violence_realistic_prolonged_graphic_or_sadistic'] = isset($data['violence_realistic_prolonged_graphic_or_sadistic']) ? $data['violence_realistic_prolonged_graphic_or_sadistic'] : null;
        $this->container['violence_realistic'] = isset($data['violence_realistic']) ? $data['violence_realistic'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAlcoholTobaccoOrDrugUseOrReferencesAllowableValues();
        if (!is_null($this->container['alcohol_tobacco_or_drug_use_or_references']) && !in_array($this->container['alcohol_tobacco_or_drug_use_or_references'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'alcohol_tobacco_or_drug_use_or_references', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGamblingSimulatedAllowableValues();
        if (!is_null($this->container['gambling_simulated']) && !in_array($this->container['gambling_simulated'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gambling_simulated', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMedicalOrTreatmentInformationAllowableValues();
        if (!is_null($this->container['medical_or_treatment_information']) && !in_array($this->container['medical_or_treatment_information'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'medical_or_treatment_information', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProfanityOrCrudeHumorAllowableValues();
        if (!is_null($this->container['profanity_or_crude_humor']) && !in_array($this->container['profanity_or_crude_humor'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'profanity_or_crude_humor', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSexualContentGraphicAndNudityAllowableValues();
        if (!is_null($this->container['sexual_content_graphic_and_nudity']) && !in_array($this->container['sexual_content_graphic_and_nudity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sexual_content_graphic_and_nudity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSexualContentOrNudityAllowableValues();
        if (!is_null($this->container['sexual_content_or_nudity']) && !in_array($this->container['sexual_content_or_nudity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sexual_content_or_nudity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHorrorOrFearThemesAllowableValues();
        if (!is_null($this->container['horror_or_fear_themes']) && !in_array($this->container['horror_or_fear_themes'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'horror_or_fear_themes', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMatureOrSuggestiveThemesAllowableValues();
        if (!is_null($this->container['mature_or_suggestive_themes']) && !in_array($this->container['mature_or_suggestive_themes'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mature_or_suggestive_themes', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getViolenceCartoonOrFantasyAllowableValues();
        if (!is_null($this->container['violence_cartoon_or_fantasy']) && !in_array($this->container['violence_cartoon_or_fantasy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'violence_cartoon_or_fantasy', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getViolenceRealisticProlongedGraphicOrSadisticAllowableValues();
        if (!is_null($this->container['violence_realistic_prolonged_graphic_or_sadistic']) && !in_array($this->container['violence_realistic_prolonged_graphic_or_sadistic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'violence_realistic_prolonged_graphic_or_sadistic', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getViolenceRealisticAllowableValues();
        if (!is_null($this->container['violence_realistic']) && !in_array($this->container['violence_realistic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'violence_realistic', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets alcohol_tobacco_or_drug_use_or_references
     *
     * @return string|null
     */
    public function getAlcoholTobaccoOrDrugUseOrReferences()
    {
        return $this->container['alcohol_tobacco_or_drug_use_or_references'];
    }

    /**
     * Sets alcohol_tobacco_or_drug_use_or_references
     *
     * @param string|null $alcohol_tobacco_or_drug_use_or_references alcohol_tobacco_or_drug_use_or_references
     *
     * @return $this
     */
    public function setAlcoholTobaccoOrDrugUseOrReferences($alcohol_tobacco_or_drug_use_or_references)
    {
        $allowedValues = $this->getAlcoholTobaccoOrDrugUseOrReferencesAllowableValues();
        if (!is_null($alcohol_tobacco_or_drug_use_or_references) && !in_array($alcohol_tobacco_or_drug_use_or_references, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'alcohol_tobacco_or_drug_use_or_references', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['alcohol_tobacco_or_drug_use_or_references'] = $alcohol_tobacco_or_drug_use_or_references;

        return $this;
    }

    /**
     * Gets gambling_and_contests
     *
     * @return bool|null
     */
    public function getGamblingAndContests()
    {
        return $this->container['gambling_and_contests'];
    }

    /**
     * Sets gambling_and_contests
     *
     * @param bool|null $gambling_and_contests gambling_and_contests
     *
     * @return $this
     */
    public function setGamblingAndContests($gambling_and_contests)
    {
        $this->container['gambling_and_contests'] = $gambling_and_contests;

        return $this;
    }

    /**
     * Gets gambling_simulated
     *
     * @return string|null
     */
    public function getGamblingSimulated()
    {
        return $this->container['gambling_simulated'];
    }

    /**
     * Sets gambling_simulated
     *
     * @param string|null $gambling_simulated gambling_simulated
     *
     * @return $this
     */
    public function setGamblingSimulated($gambling_simulated)
    {
        $allowedValues = $this->getGamblingSimulatedAllowableValues();
        if (!is_null($gambling_simulated) && !in_array($gambling_simulated, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gambling_simulated', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gambling_simulated'] = $gambling_simulated;

        return $this;
    }

    /**
     * Gets kids_age_band
     *
     * @return \OpenAPI\Client\Model\KidsAgeBand|null
     */
    public function getKidsAgeBand()
    {
        return $this->container['kids_age_band'];
    }

    /**
     * Sets kids_age_band
     *
     * @param \OpenAPI\Client\Model\KidsAgeBand|null $kids_age_band kids_age_band
     *
     * @return $this
     */
    public function setKidsAgeBand($kids_age_band)
    {
        $this->container['kids_age_band'] = $kids_age_band;

        return $this;
    }

    /**
     * Gets medical_or_treatment_information
     *
     * @return string|null
     */
    public function getMedicalOrTreatmentInformation()
    {
        return $this->container['medical_or_treatment_information'];
    }

    /**
     * Sets medical_or_treatment_information
     *
     * @param string|null $medical_or_treatment_information medical_or_treatment_information
     *
     * @return $this
     */
    public function setMedicalOrTreatmentInformation($medical_or_treatment_information)
    {
        $allowedValues = $this->getMedicalOrTreatmentInformationAllowableValues();
        if (!is_null($medical_or_treatment_information) && !in_array($medical_or_treatment_information, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'medical_or_treatment_information', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['medical_or_treatment_information'] = $medical_or_treatment_information;

        return $this;
    }

    /**
     * Gets profanity_or_crude_humor
     *
     * @return string|null
     */
    public function getProfanityOrCrudeHumor()
    {
        return $this->container['profanity_or_crude_humor'];
    }

    /**
     * Sets profanity_or_crude_humor
     *
     * @param string|null $profanity_or_crude_humor profanity_or_crude_humor
     *
     * @return $this
     */
    public function setProfanityOrCrudeHumor($profanity_or_crude_humor)
    {
        $allowedValues = $this->getProfanityOrCrudeHumorAllowableValues();
        if (!is_null($profanity_or_crude_humor) && !in_array($profanity_or_crude_humor, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'profanity_or_crude_humor', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['profanity_or_crude_humor'] = $profanity_or_crude_humor;

        return $this;
    }

    /**
     * Gets sexual_content_graphic_and_nudity
     *
     * @return string|null
     */
    public function getSexualContentGraphicAndNudity()
    {
        return $this->container['sexual_content_graphic_and_nudity'];
    }

    /**
     * Sets sexual_content_graphic_and_nudity
     *
     * @param string|null $sexual_content_graphic_and_nudity sexual_content_graphic_and_nudity
     *
     * @return $this
     */
    public function setSexualContentGraphicAndNudity($sexual_content_graphic_and_nudity)
    {
        $allowedValues = $this->getSexualContentGraphicAndNudityAllowableValues();
        if (!is_null($sexual_content_graphic_and_nudity) && !in_array($sexual_content_graphic_and_nudity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sexual_content_graphic_and_nudity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sexual_content_graphic_and_nudity'] = $sexual_content_graphic_and_nudity;

        return $this;
    }

    /**
     * Gets sexual_content_or_nudity
     *
     * @return string|null
     */
    public function getSexualContentOrNudity()
    {
        return $this->container['sexual_content_or_nudity'];
    }

    /**
     * Sets sexual_content_or_nudity
     *
     * @param string|null $sexual_content_or_nudity sexual_content_or_nudity
     *
     * @return $this
     */
    public function setSexualContentOrNudity($sexual_content_or_nudity)
    {
        $allowedValues = $this->getSexualContentOrNudityAllowableValues();
        if (!is_null($sexual_content_or_nudity) && !in_array($sexual_content_or_nudity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sexual_content_or_nudity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sexual_content_or_nudity'] = $sexual_content_or_nudity;

        return $this;
    }

    /**
     * Gets horror_or_fear_themes
     *
     * @return string|null
     */
    public function getHorrorOrFearThemes()
    {
        return $this->container['horror_or_fear_themes'];
    }

    /**
     * Sets horror_or_fear_themes
     *
     * @param string|null $horror_or_fear_themes horror_or_fear_themes
     *
     * @return $this
     */
    public function setHorrorOrFearThemes($horror_or_fear_themes)
    {
        $allowedValues = $this->getHorrorOrFearThemesAllowableValues();
        if (!is_null($horror_or_fear_themes) && !in_array($horror_or_fear_themes, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'horror_or_fear_themes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['horror_or_fear_themes'] = $horror_or_fear_themes;

        return $this;
    }

    /**
     * Gets mature_or_suggestive_themes
     *
     * @return string|null
     */
    public function getMatureOrSuggestiveThemes()
    {
        return $this->container['mature_or_suggestive_themes'];
    }

    /**
     * Sets mature_or_suggestive_themes
     *
     * @param string|null $mature_or_suggestive_themes mature_or_suggestive_themes
     *
     * @return $this
     */
    public function setMatureOrSuggestiveThemes($mature_or_suggestive_themes)
    {
        $allowedValues = $this->getMatureOrSuggestiveThemesAllowableValues();
        if (!is_null($mature_or_suggestive_themes) && !in_array($mature_or_suggestive_themes, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mature_or_suggestive_themes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mature_or_suggestive_themes'] = $mature_or_suggestive_themes;

        return $this;
    }

    /**
     * Gets unrestricted_web_access
     *
     * @return bool|null
     */
    public function getUnrestrictedWebAccess()
    {
        return $this->container['unrestricted_web_access'];
    }

    /**
     * Sets unrestricted_web_access
     *
     * @param bool|null $unrestricted_web_access unrestricted_web_access
     *
     * @return $this
     */
    public function setUnrestrictedWebAccess($unrestricted_web_access)
    {
        $this->container['unrestricted_web_access'] = $unrestricted_web_access;

        return $this;
    }

    /**
     * Gets violence_cartoon_or_fantasy
     *
     * @return string|null
     */
    public function getViolenceCartoonOrFantasy()
    {
        return $this->container['violence_cartoon_or_fantasy'];
    }

    /**
     * Sets violence_cartoon_or_fantasy
     *
     * @param string|null $violence_cartoon_or_fantasy violence_cartoon_or_fantasy
     *
     * @return $this
     */
    public function setViolenceCartoonOrFantasy($violence_cartoon_or_fantasy)
    {
        $allowedValues = $this->getViolenceCartoonOrFantasyAllowableValues();
        if (!is_null($violence_cartoon_or_fantasy) && !in_array($violence_cartoon_or_fantasy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'violence_cartoon_or_fantasy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['violence_cartoon_or_fantasy'] = $violence_cartoon_or_fantasy;

        return $this;
    }

    /**
     * Gets violence_realistic_prolonged_graphic_or_sadistic
     *
     * @return string|null
     */
    public function getViolenceRealisticProlongedGraphicOrSadistic()
    {
        return $this->container['violence_realistic_prolonged_graphic_or_sadistic'];
    }

    /**
     * Sets violence_realistic_prolonged_graphic_or_sadistic
     *
     * @param string|null $violence_realistic_prolonged_graphic_or_sadistic violence_realistic_prolonged_graphic_or_sadistic
     *
     * @return $this
     */
    public function setViolenceRealisticProlongedGraphicOrSadistic($violence_realistic_prolonged_graphic_or_sadistic)
    {
        $allowedValues = $this->getViolenceRealisticProlongedGraphicOrSadisticAllowableValues();
        if (!is_null($violence_realistic_prolonged_graphic_or_sadistic) && !in_array($violence_realistic_prolonged_graphic_or_sadistic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'violence_realistic_prolonged_graphic_or_sadistic', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['violence_realistic_prolonged_graphic_or_sadistic'] = $violence_realistic_prolonged_graphic_or_sadistic;

        return $this;
    }

    /**
     * Gets violence_realistic
     *
     * @return string|null
     */
    public function getViolenceRealistic()
    {
        return $this->container['violence_realistic'];
    }

    /**
     * Sets violence_realistic
     *
     * @param string|null $violence_realistic violence_realistic
     *
     * @return $this
     */
    public function setViolenceRealistic($violence_realistic)
    {
        $allowedValues = $this->getViolenceRealisticAllowableValues();
        if (!is_null($violence_realistic) && !in_array($violence_realistic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'violence_realistic', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['violence_realistic'] = $violence_realistic;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


