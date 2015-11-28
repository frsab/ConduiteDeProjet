package com.example.tests;

import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.*;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.Select;

public class UpdateUS {
  private WebDriver driver;
  private String baseUrl;
  private boolean acceptNextAlert = true;
  private StringBuffer verificationErrors = new StringBuffer();

  @Before
  public void setUp() throws Exception {
    driver = new FirefoxDriver();
    baseUrl = "http://www.youssefjawhar.com/";
    driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
  }

  @Test
  public void testUpdateUS() throws Exception {
    driver.get(baseUrl + "/ConduiteDeProjet/?p=showUS&IDUSER=22&IDPROJECT=49");
    driver.findElement(By.linkText("Update")).click();
    driver.findElement(By.name("DESCRIPTION")).clear();
    driver.findElement(By.name("DESCRIPTION")).sendKeys("otherUS");
    driver.findElement(By.name("COST")).clear();
    driver.findElement(By.name("COST")).sendKeys("11");
    driver.findElement(By.name("PRIORITY")).clear();
    driver.findElement(By.name("PRIORITY")).sendKeys("11");
    driver.findElement(By.name("ETAT")).clear();
    driver.findElement(By.name("ETAT")).sendKeys("ONgoing");
    driver.findElement(By.name("update")).click();
  }

  @After
  public void tearDown() throws Exception {
    driver.quit();
    String verificationErrorString = verificationErrors.toString();
    if (!"".equals(verificationErrorString)) {
      fail(verificationErrorString);
    }
  }

  private boolean isElementPresent(By by) {
    try {
      driver.findElement(by);
      return true;
    } catch (NoSuchElementException e) {
      return false;
    }
  }

  private boolean isAlertPresent() {
    try {
      driver.switchTo().alert();
      return true;
    } catch (NoAlertPresentException e) {
      return false;
    }
  }

  private String closeAlertAndGetItsText() {
    try {
      Alert alert = driver.switchTo().alert();
      String alertText = alert.getText();
      if (acceptNextAlert) {
        alert.accept();
      } else {
        alert.dismiss();
      }
      return alertText;
    } finally {
      acceptNextAlert = true;
    }
  }
}
