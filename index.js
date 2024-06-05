module.exports = {
  BASIC_ROLLOUT_SETTINGS: require('./src/settings/OnlyRolloutSettings.json'),
  BASIC_ROLLOUT_TESTING_RULE_SETTINGS: require('./src/settings/RolloutAndTestingSettings.json'),
  NO_ROLLOUT_ONLY_TESTING_RULE_SETTINGS: require('./src/settings/NoRolloutAndOnlyTestingSettings.json'),
  ROLLOUT_TESTING_PRE_SEGMENT_RULE_SETTINGS: require('./src/settings/RolloutAndTestingSettingsWithPreSegment.json'),
  TESTING_WHITELISTING_SEGMENT_RULE_SETTINGS: require('./src/settings/SettingsWithWhitelisting.json'),
  MEG_CAMPAIGN_RANDOM_ALGO_SETTINGS: require('./src/settings/MegRandomAlgoCampaignSettings.json'),
  MEG_CAMPAIGN_ADVANCE_ALGO_SETTINGS: require('./src/settings/MegAdvanceAlgoCampaignSettings.json'),

  GETFLAG_TESTS: require('./src/test-cases/index.json'),
  SEGMENTATION_TESTS: require('./src/segmentation-evaluator/index.json'),
};
