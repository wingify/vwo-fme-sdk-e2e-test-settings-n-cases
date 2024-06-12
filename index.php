<?php

namespace vwo;

class SettingsAndTestCases {

  public static function get()
  {
    return [
      "BASIC_ROLLOUT_SETTINGS" => json_decode(file_get_contents(__DIR__ . "./src/settings/OnlyRolloutSettings.json"), true),
      "BASIC_ROLLOUT_TESTING_RULE_SETTINGS" => json_decode(file_get_contents(__DIR__ . "./src/settings/RolloutAndTestingSettings.json"), true),
      "NO_ROLLOUT_ONLY_TESTING_RULE_SETTINGS" => json_decode(file_get_contents(__DIR__ . "./src/settings/NoRolloutAndOnlyTestingSettings.json"), true),
      "ROLLOUT_TESTING_PRE_SEGMENT_RULE_SETTINGS" => json_decode(file_get_contents(__DIR__ . "./src/settings/RolloutAndTestingSettingsWithPreSegment.json"), true),
      "TESTING_WHITELISTING_SEGMENT_RULE_SETTINGS" => json_decode(file_get_contents(__DIR__ . "./src/settings/SettingsWithWhitelisting.json"), true),
      "MEG_CAMPAIGN_RANDOM_ALGO_SETTINGS" => json_decode(file_get_contents(__DIR__ . "./src/settings/MegRandomAlgoCampaignSettings.json"), true),
      "MEG_CAMPAIGN_ADVANCE_ALGO_SETTINGS" => json_decode(file_get_contents(__DIR__ . "./src/settings/MegAdvanceAlgoCampaignSettings.json"), true),

      "GETFLAG_TESTS" => json_decode(file_get_contents(__DIR__ . "./src/test-cases/index.json"), true),
      "SEGMENTATION_TESTS" => json_decode(file_get_contents(__DIR__ . "./src/segmentation-evaluator/index.json"), true),
    ];
  }
}
