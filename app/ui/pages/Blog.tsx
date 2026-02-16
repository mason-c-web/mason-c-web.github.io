import { Link } from "../Link";

export function Blog() {
  return (
    <>
      <p className="py-6">
        On my{" "}
        <Link href="https://medium.com/@clarermason" title="techincal blog" /> I
        write about my projects, front end tutorials, and other engineering
        related topics.
        <br />
        <br />I also run the{" "}
        <Link
          href="https://sustainablecapitolhill.org/blog/"
          title="Sustainable Capitol Hill blog"
        />
        {". "}I produce a volunteer interview series, and get to write about
        passions for sewing, community building, and{" "}
        <Link
          href="https://sustainablecapitolhill.org/stop-giving-away-free-branded-t-shirts-but-if-you-insist-heres-how-we-made-our-own-inexpensively-from-secondhand-materials/"
          title="ending
        corporate merch once and for all."
        />
      </p>
      <img
        alt="black and white cat head blinking"
        src="https://blob.gifcities.org/gifcities/GH365M7YYOMLHHADCBFGVWIKAVTIHYBJ.gif"
      />
    </>
  );
}
