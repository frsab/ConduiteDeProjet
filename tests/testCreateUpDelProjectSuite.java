import junit.framework.Test;
import junit.framework.TestSuite;

public class CreateUpDelProjectSuite {

  public static Test suite() {
    TestSuite suite = new TestSuite();
    suite.addTestSuite(testCreateProject.class);
    suite.addTestSuite(testUpdateProject.class);
    suite.addTestSuite(testDeleteProject.class);
    return suite;
  }

  public static void main(String[] args) {
    junit.textui.TestRunner.run(suite());
  }
}
