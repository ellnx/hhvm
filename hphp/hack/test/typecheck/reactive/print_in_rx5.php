<?hh // strict

interface Rx {}

class A {
  <<__RxIfImplements(Rx::class)>>
  public function f(): void {
    // should be error
    print 1;
  }
}
