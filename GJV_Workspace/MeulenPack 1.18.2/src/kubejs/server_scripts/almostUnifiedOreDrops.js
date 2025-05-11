// 1.18 version from https://github.com/AlmostReliable/almostunified/wiki/Limitations

onEvent('lootjs', event => {
  event.addBlockLootModifier('#forge:ores').modifyLoot('#forge:raw_materials', item => {
      const replacement = AlmostUnified.getReplacementForItem(item);
      if (replacement.isEmpty()) {
          return item;
      }
      replacement.setCount(item.getCount());
      return replacement;
  });
});