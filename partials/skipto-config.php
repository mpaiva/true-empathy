	<script>
var skipToButtonLabel = "  Skip to a section"
var skipToFontFamily = "'Ubuntu Mono', sans-serif"
var skipToButtonBackgroundColor = "var(--skipToButtonBackgroundColor)"
var skipToMenuTextColor = "var(--skipToMenuTextColor)"
var skipToFocusBorderColor = "var(--skipToFocusBorderColor) !important"
var skipToMenuBackgroundColor = "var(--skipToMenuBackgroundColor)"
var skipToMenuitemFocusBackgroundColor = "var(--skipToMenuitemFocusBackgroundColor)"
var skipToMenuitemFocusTextColor = "var(--skipToMenuitemFocusTextColor)"
var skipToPosition = "calc((100vw - 154px)/2)"
var SkipToConfig = {
  settings: {
    skipTo: {
      landmarks: "[role=alert],[role=main],main,[role=banner],header,nav,[role=navigation],section,[role=region],[role=search],aside,[role=complementary],footer,[role=contentinfo]",
      headings: "h1, h2, h3, h4, h5, h6",
      positionLeft: skipToPosition,
      containerRole: "navigation",
      fontFamily: skipToFontFamily,
      buttonLabel: skipToButtonLabel,
      menuTextColor: skipToMenuTextColor,
      buttonBackgroundColor: skipToButtonBackgroundColor,
      menuitemFocusTextColor: skipToMenuitemFocusTextColor,
      focusBorderColor: skipToFocusBorderColor,
      menuBackgroundColor: skipToMenuBackgroundColor,
      menuitemFocusBackgroundColor: skipToMenuitemFocusBackgroundColor,
      menuitemFocusTextColor: skipToMenuitemFocusTextColor,
    },
  },
}
	</script>
	<style>
/* Skip To reset styles */
.skip-to {
  z-index: 1003;
}

.skip-to .label,
.skip-to .level {
  font-size: .85rem !important;
}
	</style>