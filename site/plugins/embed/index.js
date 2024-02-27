panel.plugin("your-project/embed-block", {
  blocks: {
    embed: {
      template: `
        <div class="embed-container">
          <div class="embed-preview" v-html="content.code" :style="{ aspectRatio: content.ratio }">
          </div>
          <small class="embed-ratio-index" v-if="content.ratio" v-html="'fixed aspect-ratio: '+content.ratio"></small>
        </div>
      `
    }
  }
});
