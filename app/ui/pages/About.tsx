import { Link } from "../Link";

export function About() {
  return (
    <>
      <p className="py-6">
        I'm a software engineer looking to make the transition to software
        communications. My interests include, video editing, knitting my own
        clothes, web accessibility, and 2000's design aesthetics. Welcome to my
        website!
        <br />
        <br />
        Open to hybrid (in Seattle) or remote opportunities in Developer
        Relations, Technical Content Creation, or Accessibility Engineering.
        <br />
        <br />
        Check out my{" "}
        <Link
          href="https://www.linkedin.com/in/clarermason/"
          title={"Linkedin"}
        />
        , <Link href="https://github.com/mason-c-web" title="GitHub" />, or{" "}
        <Link href="mailto:clarermason@gmail.com" title="send me a email" />!
      </p>

      <img
        alt="row of white sparkles"
        src="https://blob.gifcities.org/gifcities/66PVHQI3WTVHAMX4RC4VNSLOSBCO4BPS.gif"
      />
    </>
  );
}
