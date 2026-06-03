const plugin = require("tailwindcss/plugin");

/**
 * Fluid type scale aligned with Tailwind defaults.
 * Mobile-first sizes match text-* utilities; larger breakpoints mirror
 * the responsive stacks used before migration (md:/lg:).
 */
const fontScale = {
  "5xl": "leading-[1.25] text-[2.25rem] md:text-[3rem] lg:text-[3.75rem]",
  "4xl": "leading-[1.25] text-[1.875rem] md:text-[2.25rem] lg:text-[3rem]",
  "3xl": "leading-[1.25] text-[1.875rem] md:text-[2.25rem]",
  "2xl": "leading-[1.25] text-[1.5rem] md:text-[1.875rem]",
  xl: "leading-[1.4] text-[1.25rem] md:text-[1.5rem]",
  lg: "leading-[1.5] text-[1.125rem] md:text-[1.25rem]",
  base: "leading-[1.5] text-[1rem]",
  sm: "leading-[1.5] text-[0.875rem]",
  xs: "leading-[1.5] text-[0.75rem]",
};

module.exports = plugin(function ({ addUtilities }) {
  const utilities = Object.fromEntries(
    Object.entries(fontScale).map(([size, apply]) => [
      `.type-${size}`,
      { [`@apply ${apply}`]: {} },
    ]),
  );

  addUtilities(utilities);
});
