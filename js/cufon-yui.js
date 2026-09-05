/*
 * Cufon disabled for performance (canvas glyph rendering replaced by native
 * font rendering; body font-family: Arial, Helvetica, sans-serif already
 * matches what Cufon was drawing). Stub kept so the hundreds of pages still
 * calling Cufon.replace()/refresh() via js/functions.js don't throw.
 */
var Cufon = (function () {
  var noop = function () { return api; };
  var api = { replace: noop, refresh: noop, now: noop, set: noop, registerFont: noop };
  return api;
})();
