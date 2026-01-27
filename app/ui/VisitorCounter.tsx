export function VisitorCounter() {
  // This is counter doesn't actually count. It's just for the aesthetic.
  return (
    <div className="flex flex-col items-center ">
      <img
        style={{ paddingTop: "20px", paddingBottom: "10px" }}
        src="images/counter.png"
      />
      <p style={{ padding: 10 }}>Visitors since May 11, 1999</p>
    </div>
  );
}
