function runCode() {
  const html = document.getElementById("htmlCode").value;
  const css = `<style>${document.getElementById("cssCode").value}</style>`;
  const js = `<script>${document.getElementById("jsCode").value}<\/script>`;

  const finalCode = html + css + js;

  const frame = document.getElementById("outputFrame");
  const frameDoc = frame.contentDocument || frame.contentWindow.document;

  frameDoc.open();
  frameDoc.write(finalCode);
  frameDoc.close();
}
