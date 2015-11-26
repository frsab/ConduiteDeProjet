import junit.framework.Test;
import junit.framework.TestSuite;

public class TestSuiteRegisterLogin {

  public static Test suite() {
    TestSuite suite = new TestSuite();
    suite.addTestSuite(register.class);
    suite.addTestSuite(login.class);
    suite.addTestSuite(registerLogin.class);
    return suite;
  }

  public static void main(String[] args) {
    junit.textui.TestRunner.run(suite());
  }
}
