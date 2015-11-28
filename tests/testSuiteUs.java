import junit.framework.Test;
import junit.framework.TestSuite;

public class TestSuiteUs {

  public static Test suite() {
    TestSuite suite = new TestSuite();
    suite.addTestSuite(testCreateUs.class);
    suite.addTestSuite(testUpdateUs.class);
    suite.addTestSuite(testDeleteUs.class);
    return suite;
  }

  public static void main(String[] args) {
    junit.textui.TestRunner.run(suite());
  }
}
