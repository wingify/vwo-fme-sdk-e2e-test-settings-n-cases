<?php

namespace vwo;

class SettingsAndTestCases {

  public static function get()
  {
    return [
      "BASIC_ROLLOUT_SETTINGS" => json_decode(file_get_contents(__DIR__ . "/settings/OnlyRolloutSettings.json"), false),
      "BASIC_ROLLOUT_TESTING_RULE_SETTINGS" => json_decode(file_get_contents(__DIR__ . "/settings/RolloutAndTestingSettings.json"), false),
      "NO_ROLLOUT_ONLY_TESTING_RULE_SETTINGS" => json_decode(file_get_contents(__DIR__ . "/settings/NoRolloutAndOnlyTestingSettings.json"), false),
      "ROLLOUT_TESTING_PRE_SEGMENT_RULE_SETTINGS" => json_decode(file_get_contents(__DIR__ . "/settings/RolloutAndTestingSettingsWithPreSegment.json"), false),
      "TESTING_WHITELISTING_SEGMENT_RULE_SETTINGS" => json_decode(file_get_contents(__DIR__ . "/settings/SettingsWithWhitelisting.json"), false),
      "MEG_CAMPAIGN_RANDOM_ALGO_SETTINGS" => json_decode(file_get_contents(__DIR__ . "/settings/MegRandomAlgoCampaignSettings.json"), false),
      "MEG_CAMPAIGN_ADVANCE_ALGO_SETTINGS" => json_decode(file_get_contents(__DIR__ . "/settings/MegAdvanceAlgoCampaignSettings.json"), false),
      "SETTINGS_WITH_EXTRA_KEYS_AT_ROOT_LEVEL" => json_decode(file_get_contents(__DIR__ . "/settings/SettingsWithExtraKeysAtRootLevel.json"), false),
      "SETTINGS_WITH_EXTRA_KEYS_INSIDE_OBJECTS" => json_decode(file_get_contents(__DIR__ . "/settings/SettingsWithExtraKeysInsideObjects.json"), false),
      "SETTINGS_WITH_NO_FEATURE_AND_CAMPAIGN" => json_decode(file_get_contents(__DIR__ . "/settings/SettingsWithNoFeatureAndCampign.json"), false),
      "SETTINGS_WITH_WRONG_TYPE_FOR_VALUES" => json_decode(file_get_contents(__DIR__ . "/settings/SettingsWithWrongTypeForValues.json"), false),
      

      "GETFLAG_TESTS" => json_decode(file_get_contents(__DIR__ . "/test-cases/index.json"), true),
      "SEGMENTATION_TESTS" => json_decode(file_get_contents(__DIR__ . "/segmentation-evaluator/index.json"), true),
    ];
  }
}
