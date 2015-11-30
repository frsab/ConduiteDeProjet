import junit.framework.Test;
import junit.framework.TestSuite;

public class TestSuiteRegisterLogin {

  public static Test suite() {
    TestSuite suite = new TestSuite();
    suite.addTestSuite(testRegister.class);
    suite.addTestSuite(testLogin.class);
    return suite;
  }

  public static void main(String[] args) {
    junit.textui.TestRunner.run(suite());
  }
}
